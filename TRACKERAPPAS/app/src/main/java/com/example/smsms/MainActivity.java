package com.example.smsms;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ActivityCompat;
import androidx.core.content.ContextCompat;
import android.Manifest;
import android.content.pm.PackageManager;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.Bundle;
import android.os.StrictMode;
import android.util.Log;
import android.widget.TextView;
import org.json.JSONException;
import org.json.JSONObject;
import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;
import java.text.SimpleDateFormat;

public class MainActivity extends AppCompatActivity {

    //variable
    private TextView textViewLatitude, textViewLongitude, textViewTime;
    private LocationManager locationManager;
    private DatagramSocket ds=null;
    private InetAddress direc;
    private int port;
    byte[] bytes;


    //main
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //id location
        textViewLatitude = findViewById(R.id.latitude);
        textViewLongitude = findViewById(R.id.longitude);
        textViewTime = findViewById(R.id.time);
        locationManager = (LocationManager) getSystemService(LOCATION_SERVICE);

        //permissions location
        if (ContextCompat.checkSelfPermission(MainActivity.this, Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED) {
            ActivityCompat.requestPermissions(MainActivity.this, new String[]{Manifest.permission.ACCESS_FINE_LOCATION}, 1);
        }

        //refresh time and meters to get location
        locationManager.requestLocationUpdates(LocationManager.GPS_PROVIDER, 3000, 0   , new LocationListener() {


            @Override
            public void onLocationChanged(Location location) {
                String latitude = String.valueOf(location.getLatitude());
                String longitude = String.valueOf(location.getLongitude());

                Long time = Long.valueOf(location.getTime() / 1000);
                SimpleDateFormat sdf = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
                String convertedDate = sdf.format(new java.util.Date(time * 1000));

                textViewTime.setText((convertedDate));
                textViewLatitude.setText(latitude);
                textViewLongitude.setText(longitude);

                //udp and tcp function calls
                UDP(latitude,longitude,convertedDate);

            }
        });
    }

    //UDP function
    public void UDP(String latitude, String longitude, String date){

        //prepare data to be sent
        try {
                JSONObject obj = new JSONObject();
                obj.put("Latitude",latitude);
                obj.put("Longitude", longitude);
                obj.put("Date",date);
                String s = obj.toString();
                bytes = s.getBytes("UTF-8");
        }
        catch (JSONException e){System.out.println(e.toString());}
            catch(IOException e) {System.out.println(e.toString());}

            //create UDP Socket
            try {
                //solve networkconmainthread
                if (android.os.Build.VERSION.SDK_INT > 9) {
                    StrictMode.ThreadPolicy gfgPolicy =
                            new StrictMode.ThreadPolicy.Builder().permitAll().build();
                    StrictMode.setThreadPolicy(gfgPolicy);
                }

                //

                direc = InetAddress.getByName("54.209.109.211");
                port = 51000;
                ds = new DatagramSocket();
            }
            catch(IOException e) {System.out.println(e.toString());}

        //Sending UDP data by Thread
        Thread thread = new Thread(new Runnable(){
            @Override public void run() {
                try {
                    DatagramPacket packet=new DatagramPacket(bytes,bytes.length,direc,port);
                    ds.send(packet);
                    ;
                    Log.d("ExampleOut","sent 2");
                }
                catch (IOException e) {System.out.println(e.toString());}
            }
        });
        thread.start();
    }














































    }



