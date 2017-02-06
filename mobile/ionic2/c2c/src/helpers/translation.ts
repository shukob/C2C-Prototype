import {TranslateStaticLoader} from "ng2-translate";
import {Http} from "@angular/http";
/**
 * Created by skonb on 2017/02/02.
 */

export function createTranslateLoader(http: Http) {
  return new TranslateStaticLoader(http, 'assets/i18n', '.json');
}
