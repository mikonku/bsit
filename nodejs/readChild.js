const fs = require('fs')

fs.readFile("./callback/callback-multiple-file/childrens.json", 'utf8' , (err, data) => {
    if (err) {
      console.error(err)
      return
    }

    let parseData = JSON.parse(data);
    let dataLength = parseData.length;
     console.log(data);

     for(let idx = 0; idx < dataLength; idx++){
         console.log(parseData[idx].full_name)
     }
  })