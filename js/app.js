  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
  import { getFirestore } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-firestore.js";
  
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDI3VuHBMyP9ypp686OqbRR38NQzBjIaIE",
    authDomain: "beardhub-bddd9.firebaseapp.com",
    databaseURL: "https://beardhub-bddd9-default-rtdb.firebaseio.com",
    projectId: "beardhub-bddd9",
    storageBucket: "beardhub-bddd9.appspot.com",
    messagingSenderId: "964152416726",
    appId: "1:964152416726:web:77d6726a9b718919a16c77",
    measurementId: "G-XFP1756P75"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const banco = getFirestore(app);
  const auth = firebase.auth();

export {
  auth,
};