import { ApiService } from '@app/core/http/api/api.service';
import { HttpService } from '@app/core/http/http.service';
import { environment } from '@env/environment';
import { apiResource } from '@app/core/http/api/api.resources';

export const factory = (apiService: HttpService) => {
  return new ApiService(apiService, environment.client_id, environment.client_secret, apiResource).build();
};
