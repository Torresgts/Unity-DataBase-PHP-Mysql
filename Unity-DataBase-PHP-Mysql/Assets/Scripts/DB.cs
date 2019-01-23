using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class DB: MonoBehaviour {

    public static DB Instance;
    public DBManager db;

	// Use this for initialization
	void Start () {
        Instance = this;
        db = GetComponent<DBManager>();
    }
	
	// Update is called once per frame
	void Update () {
		
	}
}
