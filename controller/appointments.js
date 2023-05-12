class Appointments{

  constructor(){
    this.id = ''
    this.doctor_id = ''
    this.patient_id = ''
    this.appointment_date = ''
    this.appointment_type = ''
    this.notes = ''
    this.timee = ''
    this.on_date = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/appointments.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&appointment_date=' + this.appointment_date + '&appointment_type=' + this.appointment_type + '&notes=' + this.notes + '&timee=' + this.timee + '&on_date=' + this.on_date + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/appointments.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&appointment_date=' + this.appointment_date + '&appointment_type=' + this.appointment_type + '&notes=' + this.notes + '&timee=' + this.timee + '&on_date=' + this.on_date + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/appointments.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/appointments.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/appointments.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/appointments.php?getById=' + this.id)); }catch(err){}}
  async getByDoctor_id(){ try{ eval(await this.request('controller/appointments.php?getByDoctor_id=' + this.doctor_id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/appointments.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByAppointment_date(){ try{ eval(await this.request('controller/appointments.php?getByAppointment_date=' + this.appointment_date)); }catch(err){}}
  async getByAppointment_type(){ try{ eval(await this.request('controller/appointments.php?getByAppointment_type=' + this.appointment_type)); }catch(err){}}
  async getByNotes(){ try{ eval(await this.request('controller/appointments.php?getByNotes=' + this.notes)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/appointments.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByOn_date(){ try{ eval(await this.request('controller/appointments.php?getByOn_date=' + this.on_date)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/appointments.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/appointments.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&appointment_date=' + this.appointment_date + '&appointment_type=' + this.appointment_type + '&notes=' + this.notes + '&timee=' + this.timee + '&on_date=' + this.on_date + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/appointments.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/appointments.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/appointments.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setDoctor_id(doctor_id){ this.doctor_id = doctor_id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setAppointment_date(appointment_date){ this.appointment_date = appointment_date; }
  setAppointment_type(appointment_type){ this.appointment_type = appointment_type; }
  setNotes(notes){ this.notes = notes; }
  setTimee(timee){ this.timee = timee; }
  setOn_date(on_date){ this.on_date = on_date; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getDoctor_id(){ return this.doctor_id; }
  getPatient_id(){ return this.patient_id; }
  getAppointment_date(){ return this.appointment_date; }
  getAppointment_type(){ return this.appointment_type; }
  getNotes(){ return this.notes; }
  getTimee(){ return this.timee; }
  getOn_date(){ return this.on_date; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/appointments.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
