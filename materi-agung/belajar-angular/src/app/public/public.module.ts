import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { PublicComponent } from './public/public.component';
import { HomeComponent } from './home/home.component';
import { RouterModule, Routes } from '@angular/router';


const routes: Routes = [
  {
    path: "public",
    component: PublicComponent,
    children: [
      {
        path: "home",
        component: HomeComponent
      }
    ]
  }
]

@NgModule({
  declarations: [
    PublicComponent,
    HomeComponent
  ],
  imports: [
    CommonModule,

    // wajib ini yaaaa
    RouterModule.forChild(routes)
  ]
})
export class PublicModule { }
