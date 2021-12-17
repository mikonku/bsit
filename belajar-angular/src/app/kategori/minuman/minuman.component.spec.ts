import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MinumanComponent } from './minuman.component';

describe('MinumanComponent', () => {
  let component: MinumanComponent;
  let fixture: ComponentFixture<MinumanComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MinumanComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MinumanComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
