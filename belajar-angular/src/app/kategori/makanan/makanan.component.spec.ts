import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MakananComponent } from './makanan.component';

describe('MakananComponent', () => {
  let component: MakananComponent;
  let fixture: ComponentFixture<MakananComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MakananComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MakananComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
