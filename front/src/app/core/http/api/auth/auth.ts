import { ApiResourceInterface } from '@app/core/http/api/api.resource.interface';
import { ApiResource } from '@app/core/http/api/api.resource.abstract';
import { LoginContext } from '@app/core/http/api/auth/login.context';

export class Auth extends ApiResource implements ApiResourceInterface {
  public auth(loginContext: LoginContext) {
    return this.getClient().get('oauth/v2/token', { params: loginContext.toObject() });
  }
}
