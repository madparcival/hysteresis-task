
    function addCards(data){
        for(ele in data){
            let myCard=document.createElement('div')
            
            myCard.setAttribute('class','card')
            
            myCard.innerHTML=`<img src="img/${data[ele].source}" alt="">
            <h4>${data[ele].name}</h4>
            <p>₹${data[ele].price}</p>
                <div class="addToCart" id='${ele}'>
                    <h3>Add to cart</h3>
                </div>` 
            document.getElementsByClassName('container')[0].append(myCard)
        }
    }

    function addToCart(data){
        let myDiv=document.createElement('div')
        myDiv.setAttribute('class','cartCard')
        myDiv.innerHTML=`<img src="img/${data.source}" alt="">
        <h4>${data.name}</h4>
        <p>₹${data.price}</p>
        <div class="removeItem hide" id="${data.id}">
            <input type="button" value="Remove Item" >
        </div>`
        document.getElementsByClassName('cartContainer')[0].append(myDiv)
    }