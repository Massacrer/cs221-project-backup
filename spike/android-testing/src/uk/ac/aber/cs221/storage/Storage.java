package uk.ac.aber.cs221.storage;

import java.util.List;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteDatabase.CursorFactory;
import android.database.sqlite.SQLiteOpenHelper;

public abstract class Storage<T> {
   public abstract List<T> getList();
   
   public abstract void store(T t);
   
   public abstract T get(int id);
   
   class DatabaseHelper extends SQLiteOpenHelper {
      private String recordings_create = "name text not null, description text not null, latitude real, longitude real, date text not null, user_name text not null, user_email not null, user_number not null";
      private String species_create = "name text not null, comment text not null, image_1 text not null, image_2 text not null, latitude real, longitude real";
      
      public DatabaseHelper(Context context, String name,
            CursorFactory factory, int version) {
         super(context, name, factory, version);
      }
      
      @Override
      public void onCreate(SQLiteDatabase db) {
         db.execSQL("CREATE TABLE recordings (_id integer not null autoincrement, "
               + recordings_create + ");");
         db.execSQL("CREATE TABLE species (_id integer not null autoincrement, "
               + species_create + ");");
      }
      
      @Override
      public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
         db.execSQL("DROP TABLE IF EXISTS recordings");
         db.execSQL("DROP TABLE IF EXISTS species");
         onCreate(db);
         // could use ALTER TABLE instead
      }
   }
}
