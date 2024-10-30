<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="table.css">

        

        
    </head>
    
    <title>田川伊田駅舎ホテル 予約表</title>
    <body>

        <h1>田川伊田駅舎ホテル  予約表</h1>

        <div class="days">
          <input type="date" id="date"/>
          <input type="button" onclick="assign_button()" value="assign">
          <input type="button" onclick="click3()" value="予約追加">
          <input type="button" onclick="assign_delete()"value="キャンセル/変更">
          <input type="button" onclick="host_setting()" value="設定">
          
        </div>

        <div class="reserve">
          
        </div>
        <div class="table1">
            <table border="2" width="420" > 
                <tr align="center">
                  <td rowspan="3" width="20%" bgcolor="4682b4">1号室</td>
                  <td width="10%">名前</td>
                  <td colspan="2"width="50%" ><span id="table1_name"></span></td>
                  <td width="10">人数</td>
                  <td width="10"><span id="table1_number"></td>
                </tr>
                <tr align="center">
                  <td colspan="1">時間</td>
                  <td width="20"><span id="table1_time"></td>
                  <td width="10" colspan="3"><span id="table1_daynumber">拍</td>
                </tr>    
                <tr align="center">
                  <td colspan="2"><span id="table1_price">円</td>
                  <td>決済方法</td>
                  <td colspan="2">
                    <body>
                        <select name="way1" id="sum_way1">
                            <option value="0"></option>
                            <option value="1">クレジット</option>
                            <option value="2">事前支払い</option>
                            <option value="3">PayPay</option>
                            <option value="4">現金</option>
                        </select>
                    </body>
                  </td>
                </tr>
             </table>
        </div>

        <div class="table2">
          <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="4682b4">2号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table2_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table2_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table2_time"></td>
                    <td width="10" colspan="3"><span id="table2_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table2_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1" id="sum_way2">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>

        <div class="table3">
          <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="4682b4">3号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table3_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table3_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table3_time"></td>
                    <td width="10" colspan="3"><span id="table3_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table3_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1" id="sum_way3">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>

        <div class="table4">
        <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="3cb371">4号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table4_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table4_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table4_time"></td>
                    <td width="10" colspan="3"><span id="table4_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table4_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1" id="sum_way4">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>
        <div class="table5">
        <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="3cb371">5号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table5_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table5_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table5_time"></td>
                    <td width="10" colspan="3"><span id="table5_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table5_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1" id="sum_way5">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>

        <div class="table6">
        <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="fa8072">6号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table6_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table6_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table6_time"></td>
                    <td width="10" colspan="3"><span id="table6_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table6_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1" id="sum_way6">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>

        <div class="table7">
        <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="fa8072">7号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table7_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table7_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table7_time"></td>
                    <td width="10" colspan="3"><span id="table7_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table7_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1"id="sum_way7">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>
        <div class="table8">
        <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="3cb371">8号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table8_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table8_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table8_time"></td>
                    <td width="10" colspan="3"><span id="table8_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table8_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1" id="sum_way8">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>

        <div class="table9">
        <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="3cb371">9号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table9_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table9_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table9_time"></td>
                    <td width="10" colspan="3"><span id="table9_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table9_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1" id="sum_way9">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>

        <div class="table10">
        <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="4682b4">10号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table10_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table10_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table10_time"></td>
                    <td width="10" colspan="3"><span id="table10_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table10_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1" id="sum_way10">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>

        <div class="table11">
        <table border="2" width="420" > 
                  <tr align="center">
                    <td rowspan="3" width="20%" bgcolor="4682b4">11号室</td>
                    <td width="10%">名前</td>
                    <td colspan="2"width="50%" ><span id="table11_name"></span></td>
                    <td width="10">人数</td>
                    <td width="10"><span id="table11_number"></td>
                  </tr>
                  <tr align="center">
                    <td colspan="1">時間</td>
                    <td width="20"><span id="table11_time"></td>
                    <td width="10" colspan="3"><span id="table11_daynumber">拍</td>
                  </tr>    
                  <tr align="center">
                    <td colspan="2"><span id="table11_price">円</td>
                    <td>決済方法</td>
                    <td colspan="2">
                      <body>
                          <select name="way1" id="sum_way11">
                              <option value="0"></option>
                              <option value="1">クレジット</option>
                              <option value="2">事前支払い</option>
                              <option value="3">PayPay</option>
                              <option value="4">現金</option>
                          </select>
                      </body>
                    </td>
                  </tr>
              </table>
        </div>


        <div class="tablesum">
            <table border="2" width="220">
                <tr align="center">
                    <td>総売上</td>
                    <td><span id="total_price"></td>
                </tr>
                <tr align="center">
                    <td>事前支払い売上</td>
                    <td><span id="before_price"></td>
                </tr>
                <tr align="center">
                    <td>PayPay売上</td>
                    <td><span id="paypay_price"></td>
                </tr>
                <tr align="center">
                    <td>現金売上</td>
                    <td><span id="money_price"></td>
                </tr>
                <tr align="center">
                    <td>クレジット売上</td>
                    <td><span id="credit_price"></td>
                </tr>
                <tr align="center">
                    <td>宿泊税</td>
                    <td><span id="tax_price"></td>
                </tr>
                <tr align="center">
                    <td>人数</td>
                    <td><span id="number_price"></td>
                </tr>
                <tr align="center">
                    <td>客単価</td>
                    <td><span id="numberof_price"></td>
                </tr>


            </table>
        </div>
    </body>
    </html>
