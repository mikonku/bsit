import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-loping',
  templateUrl: './loping.component.html',
  styleUrls: ['./loping.component.scss']
})
export class LopingComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  // data harus berupa objek jika hendak menampilkannya
  users = [
    {
      nama: "Rizki",
      umur: 22
    },
    {
      nama: "klin",
      umur: 28
    },
    {
      nama: "Yuda",
      umur: 24
    },
    {
      nama: "Hatta",
      umur: 21
    },

  ]
}
