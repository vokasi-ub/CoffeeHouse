var nama="Mail"
var umur = 20
var varan=["Pisang","Mie"]

console.log("hallo"+nama)
console.log("Umur saya"+umur)
if(umur>=20){
    console.log("lebih dari 20")
}else{console.log("masih muda")}
    //------------
    console.log("Makanan favorit :")
for(var i=0;i<varan.length;i++){
    console.log(varan[i])
        }
        //-------------

showMakanan(varan)
function showMakanan(makanan){
        console.log("Makanan fav saya:")
        for(var i=0;i<makanan.length;i++){
            console.log(makanan[i])
        }
    }
    //--------------
showUmur(umur)
function showUmur(age){
console.log("Umur saya"+age+"tahun")
    if(age<20){console.log("Tua")}
}
       