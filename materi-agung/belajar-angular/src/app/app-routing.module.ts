import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: "auth",
    loadChildren: ()=>import("./auth/auth.module").then((mod)=>mod.AuthModule)
  },
  {
    path: "admin",
    loadChildren: ()=>import("./admin/admin.module").then((mod)=>mod.AdminModule)
  },
  {
    path: "",
    loadChildren: ()=>import("./public/public.module").then((mod)=>mod.PublicModule)
  },
  {
    path: "kategori",
    loadChildren: ()=>import("./kategori/kategori.module").then((mode)=>mode.KategoriModule)
  },
  {
    path: "laptop",
    loadChildren: ()=>import("./laptop/laptop.module").then((mod)=>mod.LaptopModule)
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
