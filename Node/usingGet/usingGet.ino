#include <ESP8266WiFi.h>
#include <FirebaseArduino.h>
#define FIREBASE_HOST "pushdatatocontroldevice.firebaseio.com"
#define FIREBASE_AUTH "r1stIhLEerpTimdPmcZaikZiuh1eMYDRcVptcvzx"
#define WIFI_SSID "IoT-Research"
#define WIFI_PASSWORD "Tapit168"
void setup() {
  Serial.begin(9600);
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
  Serial.print("connecting");
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }
  Serial.println();
  Serial.print("connected: ");
  Serial.println(WiFi.localIP());

  Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);

  pinMode(16, OUTPUT);
}
void loop() {
  // get value
  String val = Firebase.getString("ESP8266/light/state");
  Serial.println("state:" + val);
  if (val == "on")
  {
    digitalWrite(16, LOW);
  }
  else if (val == "off")
  {
    digitalWrite(16, HIGH);
  }
  delay(1000);

}
