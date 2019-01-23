using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class RegisterUser : MonoBehaviour {

    public InputField UsernameInput;
    public InputField PasswordInput;
    public Button RegisterButton;

    // Use this for initialization
    void Start () {
        RegisterButton.onClick.AddListener(() => {
            StartCoroutine(DB.Instance.db.RegisterUser(UsernameInput.text, PasswordInput.text));
        });
    }
}
