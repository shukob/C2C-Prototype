import {NgModule, ErrorHandler} from '@angular/core';
import {IonicApp, IonicModule, IonicErrorHandler} from 'ionic-angular';
import {MyApp} from './app.component';
import {HomePage} from '../pages/home/home';
import {NewsPage} from '../pages/news/news';
import {TranslateModule} from 'ng2-translate/ng2-translate';
import {TranslateLoader} from "ng2-translate";
import {Http} from "@angular/http";
import {createTranslateLoader} from "../helpers/translation";
import {LikesPage} from "../pages/likes/likes";
import {ContactPage} from "../pages/contact/contact";
import {PurchasesPage} from "../pages/purchases/purchases";
import {MyItemsPage} from "../pages/my-items/my-items";
import {SettingsPage} from "../pages/settings/settings";
import {GuidancePage} from "../pages/guidance/guidance";
import {InvitationPage} from "../pages/invitation/invitation";
import {UserDetailPage} from "../pages/user-detail/user-detail";
import {SearchPage} from "../pages/search/search";
import {EditItemPage} from "../pages/edit-item/edit-item";

@NgModule({
  declarations: [
    MyApp,
    HomePage,
    NewsPage,
    LikesPage,
    ContactPage,
    MyItemsPage,
    PurchasesPage,
    SettingsPage,
    GuidancePage,
    InvitationPage,
    UserDetailPage,
    SearchPage,
    EditItemPage
  ],
  imports: [
    IonicModule.forRoot(MyApp),
    TranslateModule.forRoot({
      provide: TranslateLoader,
      useFactory: (createTranslateLoader),
      deps: [Http]
    })
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    NewsPage,
    LikesPage,
    ContactPage,
    MyItemsPage,
    PurchasesPage,
    SettingsPage,
    GuidancePage,
    InvitationPage,
    UserDetailPage,
    SearchPage,
    EditItemPage
  ],
  providers: [{provide: ErrorHandler, useClass: IonicErrorHandler}]
})
export class AppModule {
}
