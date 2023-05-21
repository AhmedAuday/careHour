class Allergies{

  constructor(){
    this.id = ''
    this.patient_id = ''
    this.name = ''
    this.severity = ''
    this.spicifie_allerge = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/allergies.php?id=' + this.id + '&patient_id=' + this.patient_id + '&name=' + this.name + '&severity=' + this.severity + '&spicifie_allerge=' + this.spicifie_allerge + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/allergies.php?id=' + this.id + '&patient_id=' + this.patient_id + '&name=' + this.name + '&severity=' + this.severity + '&spicifie_allerge=' + this.spicifie_allerge + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/allergies.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/allergies.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/allergies.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/allergies.php?getById=' + this.id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/allergies.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByName(){ try{ eval(await this.request('controller/allergies.php?getByName=' + this.name)); }catch(err){}}
  async getBySeverity(){ try{ eval(await this.request('controller/allergies.php?getBySeverity=' + this.severity)); }catch(err){}}
  async getBySpicifie_allerge(){ try{ eval(await this.request('controller/allergies.php?getBySpicifie_allerge=' + this.spicifie_allerge)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/allergies.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/allergies.php?id=' + this.id + '&patient_id=' + this.patient_id + '&name=' + this.name + '&severity=' + this.severity + '&spicifie_allerge=' + this.spicifie_allerge + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/allergies.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/allergies.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/allergies.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setName(name){ this.name = name; }
  setSeverity(severity){ this.severity = severity; }
  setSpicifie_allerge(spicifie_allerge){ this.spicifie_allerge = spicifie_allerge; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getPatient_id(){ return this.patient_id; }
  getName(){ return this.name; }
  getSeverity(){ return this.severity; }
  getSpicifie_allerge(){ return this.spicifie_allerge; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/allergies.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
