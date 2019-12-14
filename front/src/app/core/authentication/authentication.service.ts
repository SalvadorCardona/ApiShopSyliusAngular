import { Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';
import { HttpService } from '@app/core/http/http.service';

import { Credentials, CredentialsService } from './credentials.service';
import { environment } from '@env/environment';
import { ApiService } from '@app/core/http/api/api.service';
import { LoginContext } from '@app/core/http/api/auth/login.context';

export interface LoginContext {
  username: string;
  password: string;
  remember?: boolean;
}

/**
 * Provides a base for authentication workflow.
 * The login/logout methods should be replaced with proper implementation.
 */
@Injectable({
  providedIn: 'root'
})
export class AuthenticationService {
  constructor(private apiService: ApiService, private credentialsService: CredentialsService) {}

  /**
   * Authenticates the user.
   * @param context The login parameters.
   * @return The user credentials.
   */
  login(context: LoginContext): Observable<Credentials> {
    // Replace by proper authentication call
    const data = {
      username: context.username,
      token: '123456'
    };

    const loginContext = new LoginContext();
    loginContext.clientSecret = a;
    loginContext.clientId = a;
    loginContext.username = context.username;
    loginContext.password = context.password;

    let login = {
      client_id: environment.client_id,
      client_secret: environment.client_secret,
      grant_type: 'password',
      username: context.username,
      password: context.password
    };

    this.apiService
      .auth()
      .auth(loginContext)
      .subscribe(
        response => {
          console.log(response);
          let data = response;
          // this.credentialsService.setCredentials(response, context.remember);
        },
        error => {
          console.log(error);
        }
      );

    return of(data);
  }

  /**
   * Logs out the user and clear credentials.
   * @return True if the user was logged out successfully.
   */
  logout(): Observable<boolean> {
    // Customize credentials invalidation here
    this.credentialsService.setCredentials();
    return of(true);
  }
}
