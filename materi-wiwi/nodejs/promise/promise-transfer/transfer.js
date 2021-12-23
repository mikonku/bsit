function Transfer(uang, obj,){
  console.log(`Anda akan melakukan transfer ke ${obj.penerima}`)
  return new Promise(function (resolve, reject){
    setTimeout(function(){
      if (uang > obj.nominal) {
        let sisa_saldo = uang - obj.nominal
        console.log(`Transfer ${obj.nominal} ke ${obj.penerima} berhasil. Sisa saldo anda ${sisa_saldo}`);
        resolve(sisa_saldo)
      }else{
        console.log(`Transfer ${obj.nominal} ke ${obj.penerima} gagal. Sisa saldo anda ${uang}`);
        resolve(uang)
      }
    }, obj.waktu);
  })
  
}

module.exports = Transfer;