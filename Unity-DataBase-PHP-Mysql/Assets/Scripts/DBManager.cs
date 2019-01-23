using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Networking;

public class DBManager : MonoBehaviour {

    public IEnumerator RegisterUser(string username, string password)
    {
        WWWForm form = new WWWForm();
        form.AddField("loginUser", username);
        form.AddField("loginPass", password);

        using (UnityWebRequest www = UnityWebRequest.Post("http://yoursite.com.br/RegisterUser.php", form))
        {
            yield return www.SendWebRequest();

            if (www.isNetworkError || www.isHttpError)
            {
                Debug.Log(www.error);
            }
            else
            {
                Debug.Log(www.downloadHandler.text);
            }
        }
    }

    public IEnumerator Login(string username, string password)
    {
        WWWForm form = new WWWForm();
        form.AddField("loginUser", username);
        form.AddField("loginPass", password);

        using (UnityWebRequest www = UnityWebRequest.Post("http://yoursite.com.br/Login.php", form))
        {
            yield return www.SendWebRequest();

            if (www.isNetworkError || www.isHttpError)
            {
                Debug.Log(www.error);
            }
            else
            {
                Debug.Log(www.downloadHandler.text);
            }
        }
    }

    public IEnumerator UpdateValue(string username, string coins)
    {
        WWWForm form = new WWWForm();
        form.AddField("loginUser", username);
        form.AddField("coins", coins);


        using (UnityWebRequest www = UnityWebRequest.Post("http://yoursite.com.br/Update.php", form))
        {
            yield return www.SendWebRequest();

            if (www.isNetworkError || www.isHttpError)
            {
                Debug.Log(www.error);
            }
            else
            {
                Debug.Log(www.downloadHandler.text);
            }
        }
    }

    public IEnumerator GetUserData(string username)
    {
        WWWForm form = new WWWForm();
        form.AddField("loginUser", username);

        WWW request = new WWW("http://yoursite.com.br/GetUserData.php", form);
        yield return request;
 
        string webResult = request.text;
        int webNumber = int.Parse(webResult); // Parse the string to int

         int number = webNumber;
        Debug.Log(webNumber);
    }


}
