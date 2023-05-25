
const $seebtn = document.querySelector('.icon .see');
const $maskbtn = document.querySelector('.icon .mask');
const $pwd = document.querySelector('.password input');

$maskbtn.addEventListener('click', function () {
    $maskbtn.style.display = 'none';
    $seebtn.style.display = 'flex';
});

$seebtn.addEventListener('click', function () {
    $maskbtn.style.display = 'flex';
    $seebtn.style.display = 'none';
});


function show() {
    var p = $pwd;
    p.setAttribute('type', 'text');
  }
  function hide() {
    var p = $pwd;
    p.setAttribute('type', 'password');
  }
  var pwShown = 0;

  $seebtn.addEventListener("click", function () {
    if (pwShown == 0) {
      pwShown = 1;
      show();
    } else {
      pwShown = 0;
      hide();
    }
  }, false);