// اختيار الفورم وكلمات المرور
const form = document.getElementById("signupForm");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");

// التحقق من تطابق كلمة المرور عند الضغط على زر التسجيل
form.addEventListener("submit", function(e){
  if(password.value !== confirmPassword.value){
    e.preventDefault(); // منع إرسال الفورم
    alert("Passwords do not match!"); // رسالة خطأ
    confirmPassword.focus(); // التركيز على خانة التأكيد
  }
});

function togglePassword(){
  const pass = document.getElementById("password");
  if(pass.type === "password"){
    pass.type = "text";
  }else{
    pass.type = "password";
  }
}

function toggleConfirm(){
  const pass = document.getElementById("confirmPassword");
  if(pass.type === "password"){
    pass.type = "text";
  }else{
    pass.type = "password";
  }
}