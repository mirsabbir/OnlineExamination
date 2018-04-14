
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


//  Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

/*
 * Buefy
 * 
 */

import Vue from 'vue'
import Buefy from 'buefy'




/* i don't know why axios*/ 
import Axios from 'axios';
Vue.use(Buefy);


/**************************             My code             *************************** */

/**************************            templates             **************************** */

Vue.component('checkbox', require('./components/checkbox.vue'));
var checkbox = new Vue({
    el: '#ckbox'
});
Vue.component('radio', require('./components/radio.vue'));
var radio = new Vue({
  el: '#radio'
});
Vue.component('file', require('./components/file.vue'));
var file = new Vue({
  el: '#file'
});






try{

document.addEventListener('DOMContentLoaded', function () {

    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
    
  
      // Add a click event on each of them
      $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {
  
          // Get the target from the "data-target" attribute
          var target = $el.dataset.target;
          var $target = document.getElementById(target);
  
          // Toggle the class on both the "navbar-burger" and the "navbar-menu"
          $el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
  
        });
      });
    }
  
  });

  var forname = document.getElementById('jname');
  forname.addEventListener('blur',function(){
    if(forname.value.length<3){
        $("#pname").text("Please enter a name of minimum 3 characters");
        $("#jname").addClass("is-danger");

    } else {
       $("#pname").text("");
       $("#jname").removeClass("is-danger");
    }
  });

  var foruser = document.getElementById('jusername');
  foruser.addEventListener('blur',function(){
    if(foruser.value.length<6){
        $("#pusername").text("Please enter a username of minimum 6 characters");
        $("#jusername").addClass("is-danger");
    } else {
       $("#pusername").text("");
       $("#jusername").removeClass("is-danger");
    }
  });
  function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }
  var foremail = document.getElementById('jemail');
  foremail.addEventListener('blur',function(){
    console.log(foremail.value);
    if(!isEmail(foremail.value)){
        $("#pemail").text("Please enter a valid email");
        $("#jemail").addClass("is-danger");
    } else {
       $("#pemail").text("");
       $("#jemail").removeClass("is-danger");
    }
  });

  var forpass = document.getElementById('jpass');
  forpass.addEventListener('blur',function(){
    if(forpass.value.length<6){
        $("#ppass").text("Password length should be minimum 6 characters");
        $("#jpass").addClass("is-danger");
        $("#pcpass").text("");
        $("#jcpass").removeClass("is-danger");
    } else {
       $("#ppass").text("");
       $("#jpass").removeClass("is-danger");
      }
  });
  var forcpass = document.getElementById('jcpass');
  forcpass.addEventListener('blur',function(){
    if(forpass.value.length>=6){
        if(forpass.value!=this.value){
          $("#pcpass").text("Password doesn't match");
          $("#jcpass").addClass("is-danger");
        }else {
          $("#pcpass").text("");
          $("#jcpass").removeClass("is-danger");
       }
    } 
  });

  
  


  var chkuser = new Vue({
    el: '#chkuser',
    data:{
      inputusername: '',
      msg: ''
    },
    watch : {

      inputusername: _.debounce(function(){
        if(this.inputusername.length<6){
          this.msg = 'Username should be minimum 6 characters';
          $("#chkorcross").removeClass("fa-times");
          $("#chkorcross").removeClass("fa-check");
          $("#jusername").addClass("is-danger");
        }else{
          var ok = true;
          for(var i=0;i<this.inputusername.length;i++){
            if( !( (this.inputusername[i]<='z' && this.inputusername[i]>='a')||
               (this.inputusername[i]<='Z' && this.inputusername[i]>='A') ||
              (this.inputusername[i]<='9' && this.inputusername[i]>='0') ) ){
              this.msg = 'Username should be alpha-numeric ';
              $("#jusername").addClass("is-danger");
              $("#chkorcross").removeClass("fa-times danger");
              $("#chkorcross").removeClass("fa-check success");
              ok = false;
            }
          }
          if(ok){
            this.msg ='';
            $("#jusername").removeClass("is-danger");
            axios.post('http://127.0.0.1:8000/api/check',{'unus' : this.inputusername})
            .then(function(response){
              if(response.data.status){
                $("#chkorcross").removeClass("fa-times danger");
                $("#chkorcross").addClass("fa-check success");
                $("#jusername").removeClass("is-danger");
                chkuser.msg = '';
              } else{
                $("#chkorcross").removeClass("fa-check success");
                $("#chkorcross").addClass("fa-times danger");
                $("#jusername").addClass("is-danger");
                chkuser.msg = 'Username not available ';
              }
            })
            .catch(function (error) {
              console.log(error);
            });
         }
        }
      },500)
    },
    methods:{

    }
  });


} catch(err){
  console.log(err);
}



var elp = document.getElementById('dayt');
//elp.innerText = serverTime;
function startTime(){

var elp = document.getElementById('dayt');
var str = Math.floor(rem/60) +' min '+rem%60+' seconds';
elp.innerText = str;
  setTimeout(function(){
    rem = rem-1;
    startTime();
  },1000);
}
startTime();


