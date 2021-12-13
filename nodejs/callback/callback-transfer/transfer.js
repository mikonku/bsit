function Transfer(uang, obj, cb){
  console.log(`Anda akan melakukan transfer ke ${obj.penerima}`)
  setTimeout(function(){
    if (uang > obj.nominal) {
      let sisa_saldo = uang - obj.nominal
      console.log(`Transfer ${obj.nominal} ke ${obj.penerima} berhasil. Sisa saldo anda ${sisa_saldo}`);
      cb(sisa_saldo)
    }else{
      console.log(`Transfer ${obj.nominal} ke ${obj.penerima} gagal. Sisa saldo anda ${uang}`);
      cb(0)
    }
  }, obj.waktu);
}

module.exports = Transfer;
