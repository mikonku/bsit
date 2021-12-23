let ex_promise = new Promise(function (resolve, reject) {
    setTimeout(
        () => {
            let error = false;
            if(error) {
                reject("gagal 1");
            } else {
                resolve("sukses 1")
            }
        } , 5000
    )
});

let ex_promise2 = new Promise(function (resolve, reject) {
    setTimeout(
        () => {
            let error = false;
            if(error) {
                reject("gagal 2");
            } else {
                resolve("sukses 2")
            }
        } , 5000
    )
});

ex_promise.then(value=>{
    console.log(value);
    return ex_promise2;
})
.then(value=>{
    console.log(value);
})
.catch(e => {
    console.log(e);
})