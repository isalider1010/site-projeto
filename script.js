document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form-contato");

  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault();

      let valid = true;

      const nome = form.nome;
      const email = form.email;
      const telefone = form.telefone;
      const endereco = form.endereco;
      const assunto = form.assunto;
      const mensagem = form.mensagem;

      limparValidacoes();

      const campos = [nome, email, telefone, endereco, assunto, mensagem];
      const preencheuAlgum = campos.some(campo => campo.value.trim() !== "");

      if (preencheuAlgum) {
        campos.forEach(campo => {
          const valor = campo.value.trim();

          if (!valor) {
            setErro(campo, "Por favor, preencha este campo.");
            valid = false;
            return;
          }

          if (campo === email && !validaEmail(valor)) {
            setErro(campo, "Por favor, informe um e-mail válido.");
            valid = false;
            return;
          }

          if (campo === telefone && !validaTelefone(valor)) {
            setErro(campo, "Informe um telefone válido (10 ou 11 dígitos).");
            valid = false;
            return;
          }

          setSucesso(campo);
        });
      } else {
        campos.forEach(campo => limpaValidacaoCampo(campo));
        valid = false;
      }

      if (valid) {
        alert("Mensagem enviada com sucesso!");
        form.reset();
        limparValidacoes();
      }
    });

    function setErro(campo, mensagem) {
      const formGroup = campo.closest(".mb-3, .col-md-4, .col-md-8");
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

      const formGroup = campo.closest(".mb-3, .col-md-4, .col-md-8");
      if (!formGroup) return;

      const feedback = formGroup.querySelector(".invalid-feedback");
      if (feedback) feedback.textContent = "";
    }

    function limparValidacoes() {
      const campos = form.querySelectorAll("input, select, textarea");
      campos.forEach(campo => {
        campo.classList.remove("is-invalid");
        campo.classList.remove("is-valid");

        const formGroup = campo.closest(".mb-3, .col-md-4, .col-md-8");
        if (!formGroup) return;

        const feedback = formGroup.querySelector(".invalid-feedback");
        if (feedback) feedback.textContent = "";
      });
    }

    function limpaValidacaoCampo(campo) {
      campo.classList.remove("is-invalid");
      campo.classList.remove("is-valid");

      const formGroup = campo.closest(".mb-3, .col-md-4, .col-md-8");
      if (!formGroup) return;

      const feedback = formGroup.querySelector(".invalid-feedback");
      if (feedback) feedback.textContent = "";
    }

    function validaEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email.toLowerCase());
    }

    function validaTelefone(telefone) {
      const apenasNumeros = telefone.replace(/\D/g, "");
      return /^[0-9]+$/.test(apenasNumeros) && (apenasNumeros.length >= 10 && apenasNumeros.length <= 11);
    }
  }
});
