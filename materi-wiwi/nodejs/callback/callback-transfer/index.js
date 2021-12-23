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



Transfer(uang, tia,
    (sisa_saldo) => {
        Transfer(sisa_saldo, dina, 
            (sisa_saldo) => {

            }
        )
    }
)