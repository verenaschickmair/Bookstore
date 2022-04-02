import { Injectable } from '@angular/core';
import {Author, Book, Image} from "./book";
import {HttpClient} from "@angular/common/http";
import {Observable, throwError} from "rxjs";
import {catchError, retry} from "rxjs";

@Injectable({
  providedIn: 'root'
})
export class BookStoreService {

  private api = 'https://bookstore22.s1910456028.student.kwmhgb.at/api'

  constructor(private http : HttpClient) {

  }

  getAll() : Observable<Array<Book>>{
    return this.http.get<Array<Book>>(`${this.api}/books`).pipe(retry(3)).pipe(catchError(this.errorHandler));
  }

  getSingle(isbn: string) : Observable<Book>{
    return this.http.get<Book>(`${this.api}/books/${isbn}`).pipe(retry(3)).pipe(catchError(this.errorHandler));
  }

  remove(isbn: string) : Observable<any>{
    return this.http.delete<Book>(`${this.api}/books/${isbn}`).pipe(retry(3)).pipe(catchError(this.errorHandler));
  }

  private errorHandler(error: Error | any) : Observable<any>{
    return throwError(() => new Error(error));
  }
}
