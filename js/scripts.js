$(document).ready(function(){
    $("#spinButton").on("click", main);
    
    //variables
    let bet = 0;
    let slotArray = [0, 1, 2];
    let slotValues = [0, 1, 2];
    let imgArray = ["./img/Smile.png", "./img/Face.png", "./img/Frown.png"];
    //var pathName = "";
    //let img0 = "./img/Smile.png";
    //let img1 = "./img/Face.png";
    //let img2 = "./img/Frown.png";
    
    function main(){
        bet = $("#bet").val();
        spin();
        winnings();
    }
    
    function spin(){
        for(let i = 0; i < slotArray.length; i++){
            var pull = Math.floor(Math.random() * 3);
            $(`#slot${i}`).prop("src", imgArray[pull]);
            slotValues[i] = pull;
        }
    }
    
    function winnings(){
       if(slotValues[0] == slotValues[1] && slotValues[0] == slotValues[2]){
           if(slotValues[0] == 0){
               bet = bet * 5;
           }
           else{
           bet = bet * 2;
           }
           $("#winnings").html(`Winnings : ${bet}`);
       }
       else{
       $("#winnings").html("You Lose!");
       }
    }
})