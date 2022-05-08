import {FormControl} from "@angular/forms";
import {BookStoreService} from "./book-store.service";
import {map ,Observable} from "rxjs";

export class BookValidators {
  static isbnFormat(control: FormControl): any {
    if(!control.value) {
      return null
    };
    const isolatedNumbers = control.value.replace(/-/g,'');
    const isbnPattern = /(^\d{10}$)|(^\d{13}$)/;
    return isbnPattern.test(isolatedNumbers) ? null : {isbnFormat: {valid:false}}
  }

  static isbnExists(bs: BookStoreService){
    return function (control:FormControl):Observable<any>{
      return bs.check((control.value))
        .pipe(map (exists => !exists ? null : {isbnExists: {valid: false}}));
    }
  }
}
