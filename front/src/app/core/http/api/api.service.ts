import { HttpService } from '@app/core';
import { Injectable } from '@angular/core';
import { Auth } from '@app/core/http/api/auth/auth';
import { ApiResourceInterface } from '@app/core/http/api/api.resource.interface';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private container: ApiResourceInterface[];

  constructor(
    private httpService: HttpService,
    private clientId: string,
    private clientSecret: string,
    private apiResources: ApiResourceInterface[]
  ) {}
  public build() {
    this.container = this.apiResources.map(elem => {
      return new elem(this.httpService);
    });
  }
  public auth(): Auth {
    return this.get(Auth) as Auth;
  }
  public get(ApiResourceName: ApiResourceInterface): ApiResourceInterface | null {
    return (
      this.container.find(elem => {
        return ApiResourceName instanceof elem;
      }) || null
    );
  }
}
