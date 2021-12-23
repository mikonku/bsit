import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LopingComponent } from './loping.component';

describe('LopingComponent', () => {
  let component: LopingComponent;
  let fixture: ComponentFixture<LopingComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ LopingComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(LopingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
