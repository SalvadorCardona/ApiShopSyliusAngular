import { HttpService } from '@app/core';

export abstract class ApiResource {
  public constructor(private client: HttpService) {}
  public getClient(): HttpService {
    return this.client;
  }
}
