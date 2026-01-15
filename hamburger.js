//要素を取得
const btn = document.getElementById("btn");
const menu = document.getElementById("menu");
const links = document.querySelectorAll(".sp-link");

//ボタンがクリックされたらclassを追加して表示
btn.addEventListener("click",function(){
    //メニューの表示
    menu.classList.toggle("add-hamburger-menu-sp");
    //ボタンの開閉
    btn.classList.toggle("is-open");
});

//クリックされたらclassを削除
links.forEach(function(element){
    element.addEventListener("click",function(){
    //メニューの表示
    menu.classList.remove("add-hamburger-menu-sp");
    //ボタンの開閉
    btn.classList.remove("is-open");
});
});
