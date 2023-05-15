class Disabilities{

  constructor(){
    this.id = ''
    this.patient_id = ''
    this.disability_name = ''
    this.onset_date = ''
    this.notes = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/disabilities.php?id=' + this.id + '&patient_id=' + this.patient_id + '&disability_name=' + this.disability_name + '&onset_date=' + this.onset_date + '&notes=' + this.notes + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/disabilities.php?id=' + this.id + '&patient_id=' + this.patient_id + '&disability_name=' + this.disability_name + '&onset_date=' + this.onset_date + '&notes=' + this.notes + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/disabilities.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/disabilities.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/disabilities.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/disabilities.php?getById=' + this.id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/disabilities.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByDisability_name(){ try{ eval(await this.request('controller/disabilities.php?getByDisability_name=' + this.disability_name)); }catch(err){}}
  async getByOnset_date(){ try{ eval(await this.request('controller/disabilities.php?getByOnset_date=' + this.onset_date)); }catch(err){}}
  async getByNotes(){ try{ eval(await this.request('controller/disabilities.php?getByNotes=' + this.notes)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/disabilities.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/disabilities.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/disabilities.php?id=' + this.id + '&patient_id=' + this.patient_id + '&disability_name=' + this.disability_name + '&onset_date=' + this.onset_date + '&notes=' + this.notes + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/disabilities.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/disabilities.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/disabilities.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setDisability_name(disability_name){ this.disability_name = disability_name; }
  setOnset_date(onset_date){ this.onset_date = onset_date; }
  setNotes(notes){ this.notes = notes; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getPatient_id(){ return this.patient_id; }
  getDisability_name(){ return this.disability_name; }
  getOnset_date(){ return this.onset_date; }
  getNotes(){ return this.notes; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/disabilities.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
