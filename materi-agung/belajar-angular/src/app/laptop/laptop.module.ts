import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LaptopComponent } from './laptop/laptop.component';
import { AcerComponent } from './acer/acer.component';
import { AsusComponent } from './asus/asus.component';
import { HpComponent } from './hp/hp.component';
import { DellComponent } from './dell/dell.component';
import { MacComponent } from './mac/mac.component';
import { LenovoComponent } from './lenovo/lenovo.component';
import { RouterModule, Routes } from '@angular/router';

const routes:Routes=[
  {
    path: "",
    component: LaptopComponent,
    children: [
      {
        path: "asus",
        component: AsusComponent
      },
      {
        path: "acer",
        component: AcerComponent
      },
      {
        path: "dell",
        component: DellComponent
      },
      {
        path: "hp",
        component: HpComponent
      },
      {
        path: "lenovo",
        component: LenovoComponent
      },
      {
        path: "mac",
        component: MacComponent
      }
    ]
  }
  
]

@NgModule({
  declarations: [
    LaptopComponent,
    AcerComponent,
    AsusComponent,
    HpComponent,
    DellComponent,
    MacComponent,
    LenovoComponent
  ],
  imports: [
    CommonModule,
    RouterModule.forChild(routes)
  ]
})
export class LaptopModule { }
