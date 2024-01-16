const { createApp } = Vue;

createApp({
  data() {
    return {
      expiryDate: '',
      // Traccia l'errore
      showError: false,
      errorMessage: '',
    };
  },
  methods: {
    validateCard() {
      if (!this.expiryDate) {
        this.showError = true;
        this.errorMessage = 'Inserisci una data valida.';
        return;
      }

      const currentDate = new Date();
      const expiry = new Date(this.expiryDate);

      if (expiry > currentDate) {
        //Mostra la pagina
        this.showError = false;
        window.location.href = 'success.html';
      } else {
        // Mostra l'errore
        this.showError = true;
        this.errorMessage =
          'La carta di credito è scaduta. Inserire una data valida.';
      }
    },
  },
}).mount('#app');
