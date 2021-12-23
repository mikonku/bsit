import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MakananComponent } from './makanan/makanan.component';
import { MinumanComponent } from './minuman/minuman.component';
import { KategoriComponent } from './kategori/kategori.component';
import { Route, RouterModule, Routes } from '@angular/router';

const routes:Routes = [
  {
    path:"",
    component: KategoriComponent,
    children : [
      {
        path: "makanan",
        component: MakananComponent
      },
      {
        path: "minuman",
        component: MinumanComponent
      }

    ]
  }
]



@NgModule({
  declarations: [
    MakananComponent,
    MinumanComponent,
    KategoriComponent
  ],
  imports: [
    CommonModule,
    RouterModule.forChild(routes)
  ]
})
export class KategoriModule { }
