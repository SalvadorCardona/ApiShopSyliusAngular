export class LoginContext {
  private _clientId: string;
  private _clientSecret: string;
  private _username: string;
  private _password: string;
  private _grantType = 'password';

  get clientId(): string {
    return this._clientId;
  }

  set clientId(value: string) {
    this._clientId = value;
  }

  get clientSecret(): string {
    return this._clientSecret;
  }

  set clientSecret(value: string) {
    this._clientSecret = value;
  }

  get username(): string {
    return this._username;
  }

  set username(value: string) {
    this._username = value;
  }

  get password(): string {
    return this._password;
  }

  set password(value: string) {
    this._password = value;
  }

  get grantType(): string {
    return this._grantType;
  }

  set grantType(value: string) {
    this._grantType = value;
  }

  public toObject(): object {
    return {
      client_id: this.clientId,
      client_secret: this.clientSecret,
      password: this.password,
      username: this.username,
      grand_type: this.grantType
    };
  }
}
