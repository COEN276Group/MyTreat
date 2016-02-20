import org.json.simple.JSONObject;
import org.json.simple.JSONArray;
import org.json.simple.parser.JSONParser;
import java.io.*;
public class populate{
	public static void main(String[] args){
		try{
			for(String arg:args){
				FileReader file = new FileReader(arg);
				BufferReader buffer = new BufferReader(file);

				while((String line = buffer.readLine())!=null){
					System.out.println(line);
				}


			}
		}
		catch(Exception e){
			e.printStackTrace();
		}

	}
}