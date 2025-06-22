document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form-contato");

  if (!form) return;

  const endereco = document.getElementById("endereco");

  // Listener para campo de CEP
  endereco.addEventListener("blur", function () {
    const valor = endereco.value.trim();
    const cepRegex = /^\d{5}-?\d{3}$/;

    if (cepRegex.test(valor)) {
      const cep = valor.replace(/\D/g, "");

      fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(res => res.json())
        .then(data => {
          console.log(data); // Para debug
          if (!data.erro) {
            const enderecoCompleto = `${data.logradouro}, ${data.bairro}, ${data.localidade} - ${data.uf}`;
            endereco.value = enderecoCompleto;
            setSucesso(endereco);
          } else {
            setErro(endereco, "CEP não encontrado.");
          }
        })
        .catch(() => {
          setErro(endereco, "Erro ao consultar o CEP.");
        });
    }
  });

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    let valid = true;
    const campos = [form.nome, form.email, form.telefone, form.endereco, form.assunto, form.mensagem];
    limparValidacoes();

    campos.forEach(campo => {
      const valor = campo.value.trim();
      let campoValido = true;

      if (!valor) {
        setErro(campo, "Por favor, preencha este campo.");
        valid = false;
        campoValido = false;
      }

      if (valor && campo.name === "email" && !validaEmail(valor)) {
        setErro(campo, "Por favor, informe um e-mail válido.");
        valid = false;
        campoValido = false;
      }

      if (valor && campo.name === "telefone" && !validaTelefone(valor)) {
        setErro(campo, "Informe um telefone válido (10 ou 11 dígitos).");
        valid = false;
        campoValido = false;
      }

      if (valor && campo.name === "endereco") {
        const temCEP = /^\d{5}-?\d{3}$/.test(valor);
        const partesEndereco = valor.split(",").map(p => p.trim()).filter(p => p.length >= 2);
        if (!temCEP && partesEndereco.length < 3) {
          setErro(campo, "Informe um endereço completo ou apenas o CEP.");
          valid = false;
          campoValido = false;
        }
      }

      if (campoValido) setSucesso(campo);
    });

    if (valid) {
      alert("Mensagem enviada com sucesso!");
      form.reset();
      limparValidacoes();
    }
  });

  function setErro(campo, mensagem) {
    const formGroup = campo.closest(".mb-3") || campo.closest(".col-md-4") || campo.closest(".col-md-8");
    if (!formGroup) return;

    campo.classList.add("is-invalid");
    campo.classList.remove("is-valid");

    let feedback = formGroup.querySelector(".invalid-feedback");
    if (!feedback) {
      feedback = document.createElement("div");
      feedback.className = "invalid-feedback";
      formGroup.appendChild(feedback);
    }
    feedback.textContent = mensagem;
  }

  function setSucesso(campo) {
    campo.classList.remove("is-invalid");
    campo.classList.add("is-valid");

    const formGroup = campo.closest(".mb-3") || campo.closest(".col-md-4") || campo.closest(".col-md-8");
    if (!formGroup) return;

    let feedback = formGroup.querySelector(".invalid-feedback");
    if (feedback) feedback.textContent = "";
  }

  function limparValidacoes() {
    const campos = form.querySelectorAll("input, select, textarea");
    campos.forEach(campo => {
      campo.classList.remove("is-invalid", "is-valid");
      const formGroup = campo.closest(".mb-3") || campo.closest(".col-md-4") || campo.closest(".col-md-8");
      if (formGroup) {
        const feedback = formGroup.querySelector(".invalid-feedback");
        if (feedback) feedback.textContent = "";
      }
    });
  }

  function validaEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.toLowerCase());
  }

  function validaTelefone(telefone) {
    const numeros = telefone.replace(/\D/g, "");
    return /^[0-9]+$/.test(numeros) && (numeros.length === 10 || numeros.length === 11);
  }
});
