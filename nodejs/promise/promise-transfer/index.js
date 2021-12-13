const Transfer = require('./transfer')

let uang = 100000;

let dina = {
    penerima: "Dina",
    nominal: 40000,
    waktu:500
};

let tia = {
    penerima: "Tia",
    nominal: 40000,
    waktu:1000
};

let lala = {
    penerima: "Tia",
    nominal: 40000,
    waktu:1000
};

let lulu = {
    penerima: "Tia",
    nominal: 40000,
    waktu:1000
};

// Transfer(uang, tia).then(function (sisa_saldo) {
//     return Transfer(sisa_saldo, dina)
// })
// .then(function (sisa_saldo) {
// })




Transfer(uang, tia).then(
    value=>{
    // console.log(value);
    return Transfer(value, dina);
}).then(value=>{
    // console.log(value)
    return Transfer(value, lala);
}).then(value=>{
    // console.log(value)
    return Transfer(value, lulu);
}).catch(function (e) {
    console.log(e);
});