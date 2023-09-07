<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Commerce</title>
    <style>
        
        
        .parent{
            display: flex;
        }
        .parent .container{
            display: block;
            /* width: fit-content; */
            columns: 3;
            flex: 4;
        }
        .container .card{
            /* width: 200px; */
            text-align: center;
            padding: 20px;
        }
        .container .card img{
            /* width: 200px; */
            height: 200px;
            filter: grayscale(1);
        }
        .container .card img:hover{
            filter: grayscale(0);
            transition: 2s;
            transform: scale(1.1);
        }
        .container .card .addToCart{
            background-color: yellow;
            cursor: pointer;
        }
        .cartContainer{
            display: none;
            position: relative;
            right: -250px;
            top: 50px;
            width: 250px;
            
            background-color: #cdcaff;
            text-align: center;
        }
        .cartContainer .cartCard{
            background-color: #a7e2ed;
            border: 2px solid ;
            margin: 2px;
        }
        .cartContainer .cartCard img{
            width: 100px;
        }
        .hide{
            display:none;
        }
        /* cart animation */
        #getCart:checked ~ .cartContainer{
            display: block;
            right: 0px;
            height: 600px;
            overflow: auto;
            transition: 2s;
        }


    </style>
</head>
<body>
    <!-- <h1>Hamazon</h1> -->

    <div class="parent">
        <div class="container">
    </div>
    <input type="checkbox" name="" class="hide" id="getCart">
    <label for="getCart"><i class="fa-solid fa-cart-shopping"></i></label>    
    
    <div class="cartContainer">
        <h3>Cart</h3>
        
    </div>
</div>
 
</body>
<script src="https://kit.fontawesome.com/d6f56984f1.js" crossorigin="anonymous"></script>
<script src="js/addingfunctions.js"></script>
<script>
    let cardData={
    1:{
        'id':1,
        'name':'camera',
        'source':'camera.png',
        'price':100000
    },
    2:{
        'id':2,
        'name':'Neck Band',
        'source':'boatneckband.webp',
        'price':2500
    },
    3:{
        'id':3,
        'name':'Apple Iphone',
        'source':'iphone.jpg',
        'price':80000
    },
    4:{
        'id':4,
        'name':'Power Bank',
        'source':'MIpowerbank.jpg',
        'price':800
    },
    5:{
        'id':5,
        'name':'Power Bank',
        'source':'philipspowerbank.webp',
        'price':1500
    },
    6:{
        'id':6,
        'name':'Trimmer',
        'source':'philipstrimmer.jpg',
        'price':1300
    }}

    addCards(cardData)
    

    let myCartElements=document.getElementsByClassName('addToCart')
    let cartData=[]
    // adding the click event for all addto cart
    for(i=0;i<myCartElements.length;i++){
        document.getElementsByClassName('addToCart')[i].addEventListener('click',function(){
        cartData.push(cardData[this.getAttribute('id')])
        addToCart(cardData[this.getAttribute('id')])
        console.log(cartData)
    })

    }

   
</script>
</html>