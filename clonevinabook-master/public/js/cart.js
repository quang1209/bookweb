var cart = document.querySelector('.cart-icon')

function cartdrop(){
    document.querySelector('.header_cart-list').classList.toggle('drop')
    showgiohang()

}
cart.addEventListener("click",cartdrop)
window.onclick = function(event) {
    if (!event.target.matches('.cart-icon')) {
        var dropdowns = document.getElementsByClassName("header_cart-list");
        for(var i =0;i< dropdowns.length;i++){
            var opendropdown = dropdowns[i]
            if (opendropdown.classList.contains('drop')) {
                opendropdown.classList.remove('drop');
              }

            }
        }
}
document.querySelector('.header_cart-list').addEventListener('click',function (event) {
               event.stopPropagation()
        })
giohang = new Array();
 function themgiohang(x){
    var boxsp = x.parentElement.children
    var anh = boxsp[0].children[0].src
    var tensp = boxsp[1].children[0].innerText
    var giatien = boxsp[3].children[2].innerText
    var soluong = 1
    var sp = new Array(anh,tensp,giatien,soluong)
    var kt=0;
    for(let i = 0;i<giohang.length; i++){
        if(giohang[i][1] == tensp){
            kt=1;
            soluong += parseInt(giohang[i][3]);
            giohang[i][3]=soluong;
            break;
        }

    }
    if(kt==0){
        giohang.push(sp)
    }
    showcountsp()

 }
 function showcountsp(){
    if(giohang.length > 0){
        var count = document.getElementById('countsp')
        count.classList.add('drop')
        count.innerHTML=giohang.length
    }
    else{
        var count = document.getElementById('countsp')
        count.classList.remove('drop')
    }
 }
 function showgiohang(){
    if(giohang.length === 0){
        document.getElementById('header_cart-list-item-bot').classList.add('none')
        var ttgh = " "
        ttgh +='<p id="header_cart-list-item-empty" class="drop">Giỏ hàng rỗng</p>'
        document.getElementById('header_cart-list-item').innerHTML = ttgh;
    }
    else{
        var ttgh = ""
        var tong = 0
        for(let i = 0;i<giohang.length; i++){
            var tt = parseFloat(giohang[i][2]) * parseFloat(giohang[i][3])
            tong += tt;
            ttgh += '<div class="header_cart-list-item-top">'+
            '<div class="header_cart-list-item-img"><img src="'+giohang[i][0]+'" alt=""></div>' +
            '<div class="header_cart-list-item-des">'+
               ' <a href="" class="header_cart-list-item-header">'+giohang[i][1]+'</a>'+
               ' <div class="header_cart-list-item-quantity-and-price">'+
                   ' <span class="header_cart-list-item-quantity">'+
                        ''+(giohang[i][3])+''+
                    '</span> x '+
                    '<span class="header_cart-list-item-price">'+
                       ' '+giohang[i][2]+''+
                    '</span>'+
                '</div>'+
                '<i class="fa-sharp fa-solid fa-circle-xmark header_cart-list-item-icon none" onclick="xoasp(this)"></i>'+
            '</div>'+
       '</div>'

        }
        ttgh += '<div class="header_cart-list-item-bot" id="header_cart-list-item-bot">'+
        '<div class="header_cart-list-item-total">'+
            'Tổng cộng: <span class="header_cart-list-item-total-price">'+tong+'.000đ</span>'+
        '</div>'+

       ' <a href="" class="header_cart-list-item-add">XEM GIỎ HÀNG</a>'+

      '</div>'
      document.getElementById('header_cart-list-item').innerHTML = ttgh
    }

 }
 function xoasp(x){
    var xoa = x.parentElement.parentElement
    var tensp = xoa.children[1].children[0].innerText
    xoa.remove()
    for(let i = 0;i<giohang.length; i++){
        if(giohang[i][1]==tensp){
            giohang.splice(i,1)
        }
    }

    showgiohang()
    showcountsp()
 }
