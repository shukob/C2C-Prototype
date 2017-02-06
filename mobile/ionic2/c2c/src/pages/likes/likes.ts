import {Component} from '@angular/core';
import {NavController, NavParams} from 'ionic-angular';
import {BasePage} from "../base/base-page";

/*
 Generated class for the Likes page.

 See http://ionicframework.com/docs/v2/components/#navigation for more info on
 Ionic pages and navigation.
 */
@Component({
  selector: 'page-likes',
  templateUrl: 'likes.html'
})
export class LikesPage extends BasePage {


  public static get title() {
    return "いいね! 一覧";
  }

  public get title(){
    return LikesPage.title;
  }

  constructor(public navCtrl: NavController, public navParams: NavParams) {
    super();
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad LikesPage');
  }

}
