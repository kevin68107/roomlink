const firebaseConfig = {
    apiKey: "AIzaSyCv3u8OvED4qNTOoh6heUd3p39e4OdhjFI",
    authDomain: "signup-page-45b8d.firebaseapp.com",
    projectId: "signup-page-45b8d",
    storageBucket: "signup-page-45b8d.appspot.com",
    messagingSenderId: "500775653772",
    appId: "1:500775653772:web:63dfa2e5fce8b88fe186a9",
    measurementId: "G-29FLEQPZ1T"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

  //let's code
  var datab = firebase.database().ref('data');
  function UserRegister(){
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  firebase.auth().createUserWithEmailAndPassword(email.password).then(function(){

  }).catch(function (error){
    var errorcode = error.code;
    var errormsg = error.message;
  });
}
const auth = firebase.auth();
function SignIn(){
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  const promise = auth.SignInWithEmailAndPassword(email.password);
  promise.catch(e => alert(e.msg));
  window.open("https://www.google.com","_self");
}
document.getElementById('form').addEventListener('submit',(e) =>{
  e.preventDefault();
  var userinfo = datab.push();
  //login contents//
  userinfo.set({
    email:getId('email'),
    password:getId('password')
  });
  alert("Successfully Signed Up");
  console.log("sent");
  document.getElementById('form').requestFullscreen();
});
function getId(id){
  return document.getElementById(id).value;
}