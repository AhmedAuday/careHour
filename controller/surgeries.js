class Surgeries{

  constructor(){
    this.id = ''
    this.doctor_id = ''
    this.patient_id = ''
    this.surgery_name = ''
    this.surgery_date = ''
    this.notes = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/surgeries.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&surgery_name=' + this.surgery_name + '&surgery_date=' + this.surgery_date + '&notes=' + this.notes + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/surgeries.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&surgery_name=' + this.surgery_name + '&surgery_date=' + this.surgery_date + '&notes=' + this.notes + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/surgeries.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/surgeries.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/surgeries.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/surgeries.php?getById=' + this.id)); }catch(err){}}
  async getByDoctor_id(){ try{ eval(await this.request('controller/surgeries.php?getByDoctor_id=' + this.doctor_id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/surgeries.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getBySurgery_name(){ try{ eval(await this.request('controller/surgeries.php?getBySurgery_name=' + this.surgery_name)); }catch(err){}}
  async getBySurgery_date(){ try{ eval(await this.request('controller/surgeries.php?getBySurgery_date=' + this.surgery_date)); }catch(err){}}
  async getByNotes(){ try{ eval(await this.request('controller/surgeries.php?getByNotes=' + this.notes)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/surgeries.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/surgeries.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&surgery_name=' + this.surgery_name + '&surgery_date=' + this.surgery_date + '&notes=' + this.notes + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/surgeries.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/surgeries.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/surgeries.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setDoctor_id(doctor_id){ this.doctor_id = doctor_id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setSurgery_name(surgery_name){ this.surgery_name = surgery_name; }
  setSurgery_date(surgery_date){ this.surgery_date = surgery_date; }
  setNotes(notes){ this.notes = notes; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getDoctor_id(){ return this.doctor_id; }
  getPatient_id(){ return this.patient_id; }
  getSurgery_name(){ return this.surgery_name; }
  getSurgery_date(){ return this.surgery_date; }
  getNotes(){ return this.notes; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/surgeries.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
