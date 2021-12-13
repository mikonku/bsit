const fs = require('fs');

function match_data(parent_file, children_file) {
  // your code here...
  fs.readFile(parent_file, 'utf8', (err, dataParent) =>
  {
    if(err) throw err;
    let parseParent = JSON.parse(dataParent);
    let parentLength = parseParent.length;

    fs.readFile(children_file, 'utf8', (err, dataChild) =>
    {
      if (err) throw err;
      let parseChild = JSON.parse(dataChild);
      let childLength = parseChild.length;
      for(let i = 0; i < parentLength; i++){

        console.log("Anak-anak Bapak: " + parseParent[i].last_name)
        for(let j = 0; j < childLength; j++){
          if (parseChild[j].family == parseParent[i].last_name){
            // console.log( "-" + JSON.stringify(parseChild[j].full_name));
          }

          // const result = parseChild.filter(word => word.nama == parseParent[i].last_name);
          // console.log(result);
        }

        let arr_child = [];
        for(let idxChild = 0; idxChild < childLength; idxChild++){
          if (parseParent[i].last_name === parseChild[idxChild].family) {
            arr_child.push(parseChild[idxChild].full_name+" " +parseChild[idxChild].family)
          }
        }

        parseParent[i].children = arr_child;
        console.log(parseParent[i])

        // console.log(arr_child);
        // console.log("------------------------------------")



      }

    })

  })
}

match_data('./parents.json', './childrens.json')
console.log("Notification : Data sedang diproses !");
