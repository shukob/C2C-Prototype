import {Component, ViewChild} from '@angular/core';
import {Nav, Platform} from 'ionic-angular';
import {StatusBar, Splashscreen} from 'ionic-native';

import {HomePage} from '../pages/home/home';
import {NewsPage} from '../pages/news/news';
import {LikesPage} from "../pages/likes/likes";
import {MyItemsPage} from "../pages/my-items/my-items";
import {PurchasesPage} from "../pages/purchases/purchases";
import {SettingsPage} from "../pages/settings/settings";
import {GuidancePage} from "../pages/guidance/guidance";
import {ContactPage} from "../pages/contact/contact";
import {InvitationPage} from "../pages/invitation/invitation";
import {UserDetailPage} from "../pages/user-detail/user-detail";


@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  @ViewChild(Nav) nav: Nav;

  rootPage: any = HomePage;

  pages: Array<{ title: string, component: any, icon: String }>;

  constructor(public platform: Platform) {
    this.initializeApp();

    // used for an example of ngFor and navigation
    this.pages = [
      {title: 'ホーム', component: HomePage, icon: 'home'},
      {title: 'ニュース', component: NewsPage, icon: 'information-circle'},
      {title: 'いいね! 一覧', component: LikesPage, icon: 'heart-outline'},
      {title: '出品した商品', component: MyItemsPage, icon: 'shirt'},
      {title: '購入した商品', component: PurchasesPage, icon: 'filing'},
      {title: '設定', component: SettingsPage, icon: 'settings'},
      {title: 'ガイド', component: GuidancePage, icon: 'help'},
      {title: 'お問い合わせ', component: ContactPage, icon: 'mail'},
      {title: '招待してポイントGET', component: InvitationPage, icon: 'people'},
    ];

  }

  initializeApp() {
    this.platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      StatusBar.styleDefault();
      Splashscreen.hide();
    });
  }

  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.nav.setRoot(page.component);
  }

  openProfile() {
    this.nav.setRoot(UserDetailPage)
  }
}
