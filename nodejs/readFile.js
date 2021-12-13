const fs = require('fs')

function readFile(file1) {

  return new Promise(function (resolve, reject) {
        fs.readFile(file1, 'utf8', function (err, data) {
            if (err)
                reject(err);
            else
                resolve(data);
        });
    });
}

async function copyFile() {

    try {
        let dataDemo1 = await readFile('data.json')
        // await writeDemo2(dataDemo1)
        console.log(dataDemo1)
    } catch (error) {
        console.error(error);
    }
}
copyFile();


function writeDemo2(dataDemo1) {
    return new Promise(function(resolve, reject) {
      fs.writeFile('text.txt', dataDemo1, 'utf8', function(err) {
        if (err)
          reject(err);
        else
          resolve("Promise Success!");
      });
    });
  }

  console.log(writeDemo2("data.json"))