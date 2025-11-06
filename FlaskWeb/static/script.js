 document.getElementById("loginForm").addEventListener("submit", function(e) {
      e.preventDefault(); // prevent form submission

      // Get form values
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;

      // Basic check
      if (username === "admin" && password === "12345") {
        // Redirect to dashboard
        window.location.href = "dashboard.html";
      } else {
        alert("Invalid username or password!");
      }
    });





     function processBase64() {
      const text = document.getElementById('inputText').value.trim();
      const mode = document.getElementById('mode').value;
      const outputDiv = document.getElementById('output');

      if (!text) {
        outputDiv.textContent = "Please enter some text.";
        return;
      }

      try {
        let result = '';
        if (mode === 'encode') {
          result = btoa(unescape(encodeURIComponent(text)));
        } else {
          result = decodeURIComponent(escape(atob(text)));
        }
        outputDiv.textContent = result;
      } catch (e) {
        outputDiv.textContent = "Invalid input for decoding!";
      }
    }


   